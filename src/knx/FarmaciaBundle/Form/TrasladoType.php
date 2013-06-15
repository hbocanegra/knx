<?php

namespace knx\FarmaciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TrasladoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha',	'datetime', array('required' => true, 'label' => 'Fecha Traslado', 'read_only' => true))
             ->add('inventario', 		'entity', array(
                'class' => 'knx\\FarmaciaBundle\\Entity\\Inventario',
                'required' => true,
                'empty_value' => 'Selecciona un Imv',
                'query_builder' => function(EntityRepository $repositorio) {
                return $repositorio->createQueryBuilder('s')
                ->orderBy('s.precioCompra', 'ASC');}
        ))
        
        ->add('farmacia', 		'entity', array(
        		'class' => 'knx\\FarmaciaBundle\\Entity\\Farmacia',
        		'required' => true,'label' => 'Traspaso A:',
        		'empty_value' => 'Selecciona una Farmacia',
        		'query_builder' => function(EntityRepository $repositorio) {
        			return $repositorio->createQueryBuilder('s')
        			->orderBy('s.nombre', 'ASC');}
        ))
           	 ->add('cant',	'integer',  array('required' => true, 'label' => 'Cantidad', 'attr' => array('placeholder' => 'cantidad')))                        
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'knx\FarmaciaBundle\Entity\Traslado'
        ));
    }

    public function getName()
    {
        return 'newTrasladoType';
    }
}
