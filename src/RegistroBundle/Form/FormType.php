<?php

namespace RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class FormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Nombre(s)',
                'required'=>true,
            ))
            ->add('paterno', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Apellido Paterno',
                'required'=>true,

            ))
            ->add('materno', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'Apellido Materno',
                'required'=>false,

            ))
            ->add('sexo', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'   => array(
                    false => 'Mujer',
                    true => 'Hombre'),
                'expanded' => true,
                'multiple' => false,
                'required'  => true,
                'choices_as_values' => false,

            ))
            ->add('mail', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Correo electrónico',
                'required'=>true,

            ))
            ->add('nacimiento','Symfony\Component\Form\Extension\Core\Type\DateType',array(
                'placeholder' => array(
                    'year' => 'Año',
                    'month' => 'Mes',
                    'day' => 'Día'),
                'years'=> range(1980,2002),
                'label'=>'*Fecha de nacimiento',
                'required'=>true,

            ))

            ->add('procedencia', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Universidad de procedencia',
                'required'=>true,

            ))
            ->add('carrera','Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Carrera',
                'required'=>true,

            ))
            ->add('semestre', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Semestre o cuatrimestre',
                'required'=>true,

            ))
            ->add('porcentaje', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Porcentaje de avance (hasta noviembre 2020)',
                'choices'=>array(
                    '50'=>'50',
                    '60'=>'60',
                    '70'=>'70',
                    '80'=>'80',
                    '90'=>'90',
                    '100'=>'100'),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,
            ))

            ->add('promedio', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Promedio',
                'choices'=>array(
                    '8'=>'8.0',
                    '8.1'=>'8.1',
                    '8.2'=>'8.2',
                    '8.3'=>'8.3',
                    '8.4'=>'8.4',
                    '8.5'=>'8.5',
                    '8.6'=>'8.6',
                    '8.7'=>'8.7',
                    '8.8'=>'8.8',
                    '8.9'=>'8.9',
                    '9.0'=>'9.0',
                    '9.1'=>'9.1',
                    '9.2'=>'9.2',
                    '9.3'=>'9.3',
                    '9.4'=>'9.4',
                    '9.5'=>'9.5',
                    '9.6'=>'9.6',
                    '9.7'=>'9.7',
                    '9.8'=>'9.8',
                    '9.9'=>'9.9',
                    '10.0'=>'10.0'),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,

            ))
            ->add('profesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Nombre del profesor que lo recomienda',
                'required'=>true,

            ))
            ->add('univprofesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Universidad del profesor',
                'required'=>true,

            ))
            ->add('mailprofesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Correo del profesor (para solicitar carta de recomendación)',
                'required'=>true,

            ))
            ->add('historialFile', 'vich_file', array(
                'required'=> false,
                'label' => 'Historial académico'
            ))

            ->add('cartaFile', 'vich_file', array(
                'required' => false,
                'label' => 'Carta de recomendación'
            ))

            ->add('participado', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'=>array(
                    true=>'Si ',
                    false=>'No '),
                'expanded'=>true,
                'required'=>true,
                'label'=>'*¿Ha participado en alguna Escuela de Verano o algún evento similar anteriormente? (no necesariamente en Morelia)',
                'choices_as_values' => false,

            ))
            ->add('cursog1', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Selecciona tu curso de G1',
                'choices'=>array(
                    'A1 - ¿Cómo construir teoría física?' => 'A1 - ¿Cómo construir teoría física?',
                    'B1 - “Espacios Métricos y grupos”' => 'B1 - “Espacios Métricos y grupos”',
                    'C1 - “Introducción a la teoría de Caracteres de grupos finitos”' => 'C1 - “Introducción a la teoría de Caracteres de grupos finitos”',
                ),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,
            ))
            ->add('cursog2', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Selecciona tu curso de G2',
                'choices'=>array(
                    'A2 - Construyendo el espacio-tiempo' => 'A2 - Construyendo el espacio-tiempo',
                    'B2 - Geometría hiperbólica' => 'B2 - Geometría hiperbólica',
                    'C2 - Introducción a la teoría estadística de los valores extremos' => 'C2 - Introducción a la teoría estadística de los valores extremos',
                ),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,
            ))
            ->add('cursog3', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Selecciona tu curso de G3',
                'choices'=>array(
                    'A3 - La generalización del electromagnetismo que modela las fuerzas fundamentales' => 'A3 - La generalización del electromagnetismo que modela las fuerzas fundamentales',
                    'B3 - Espacios métricos de curvatura negativa.' => 'B3 - Espacios métricos de curvatura negativa.',
                    'C3 - Carcajes y álgebras de conglomerado' => 'C3 - Carcajes y álgebras de conglomerado',
                ),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,
            ))
            ->add('evento', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'En caso afirmativo, escriba el año, el nombre del evento y el lugar:',
                'required'=>false,
            ))
            ->add('razones', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'*Razones por las que deseas entrar a la escuela',
                'required'=>true,

            ))
            ->add('comentarios', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'Comentarios',
                'required'=>false,

            ))
            ->add('recomendacion', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'Recomendación',
                'required'=>false,

            ))

            ->add('confirmado', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'=>array(
                    true=>'Si',
                    false=>'No'),
                'expanded'=>true,
                'required'=>false,
                'placeholder'=>false,
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RegistroBundle\Entity\Form'
        ));
    }


}
