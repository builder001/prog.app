<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ContactType;
use AppBundle\Entity\Contact;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/contact/",name="contacts")
     */
    public function contactAction(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
        $recaptcha = new ReCaptcha($this->getParameter('secret'));
        $resp = $recaptcha->verify($request->request->get('g-recaptcha-response'), $request->getClientIp());
        $form = $this->createForm(ContactType::class,$contact);
        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid() && $resp->isSuccess()){
                $message = (new \Swift_Message('Contact enquiry from Progression'))
                    ->setFrom('contact.form@progression.in.ua')
                    ->setTo($this->getParameter('admin_email'))
                    ->setBody($this->renderView('contact/mail.txt.twig', ['contact' => $contact]));
                $mailer->send($message);
                $this->addFlash('notice', $this->get('translator')->trans('contact_form.flash_message'));
                return $this->redirect($this->generateUrl('contacts'));
            } elseif (!$resp->isSuccess()) {
               $this->addFlash('error', $this->get('translator')->trans('contact_form.captcha_flash_message'));
            }

        }
        return $this->render('contact/contact.html.twig',['form'=>$form->createView()]);
    }
}