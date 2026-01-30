<?php

namespace App\Form;

use App\Model\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputClass = 'w-full px-4 py-3 rounded text-primary ring-1 ring-slate-200';
        $labelClass = 'block font-semibold mb-2';

        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => ['class' => $labelClass],
                'attr' => [
                    'placeholder' => '',
                    'class' => $inputClass,
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'label_attr' => ['class' => $labelClass],
                'attr' => [
                    'placeholder' => '',
                    'class' => $inputClass,
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'label_attr' => ['class' => $labelClass],
                'attr' => [
                    'placeholder' => '',
                    'class' => $inputClass,
                ],
                'constraints' => [
                    new NotBlank(message: 'L\'adresse e-mail est obligatoire.'),
                    new Email(message: 'Veuillez saisir une adresse e-mail valide.'),
                ],
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'label_attr' => ['class' => $labelClass],
                'attr' => [
                    'placeholder' => '',
                    'class' => $inputClass,
                ],
                'constraints' => [
                    new NotBlank(message: 'Le numéro de téléphone est obligatoire.')
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'label_attr' => ['class' => $labelClass],
                'attr' => [
                    'rows' => 5,
                    'class' => $inputClass.' resize-none',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le message est obligatoire.'),
                    new Length(max: 3000, maxMessage: 'Le message ne peut pas contenir plus de {{ limit }} caractères.'),
                ],
            ])
            ->add('acceptTerms', CheckboxType::class, [
                'label' => 'En cochant cette case, j\'accepte que mes données soient traitées par MNR Partners pour me recontacter.',
                'label_attr' => ['class' => 'text-sm cursor-pointer'],
                'mapped' => false,
                'row_attr' => [
                    'class' => 'flex flex-row-reverse items-center gap-2 justify-end',
                ],
                'constraints' => [
                    new IsTrue(message: 'Vous devez accepter le traitement de vos données.'),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
