<?php
namespace App\Form\DataTransformer; 
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Doctrine\ODM\MongoDB\Mapping\Annotations;
use App\Document\Auctions;
use App\Form\DataTransformer\StringToDateTimeTransformer as DataTransformerStringToDateTimeTransformer;
use PhpParser\Node\Expr\Cast\String_;
//use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use App\Form\DataTransformer\StringToDateTimeTransformer; // Inclure la classe ici
use App\Repository\CategoryRepository;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer as DataTransformerDateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\Type\DateType;

//use App\Form\DateTimeToStringTransformer as StringToDateTimeTransformer; // Renommage de la classe

class AuctionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $categories = $_SESSION['categoriesList'];
        $selectCategories = [];
        foreach ($categories as $cat => $subCat) {
            $selectCategories[$cat] = $cat;
        }

        $builder
            ->add('title', TextType::class)

            ->add('category', ChoiceType::class, [
                'choices' => $selectCategories,
            ])
            ->add('subcategory', ChoiceType::class, [
                'choices' => [
                    // Ajoutez d'autres sous-catégories ici
                    'Sous-catégorie 1' => 'souscategorie1',
                    'Sous-catégorie 2' => 'souscategorie2',
                    'Sous-catégorie 3' => 'souscategorie3',        
                ],
            ])
            ->add('description', TextareaType::class)

            ->add('start_price', NumberType::class)

            ->add('reserve_price', NumberType::class)

            ->add('sold_price', NumberType::class)

            ->add('start_date', DateType::class, [
                /* 'widget' => 'single_text',*/
                'html5' => false, 
                'format' => 'dd/MM/yyyy',
            ])
           
            ->add('duration', ChoiceType::class, [
                'choices' => [
                   
                    '6h' => '6',
                    '12h' => '12',
                    '24h' => '24',        
                ],
            ])

            ->add('delivery_mode', ChoiceType::class, [
                'choices' => [
                    'Livraison standard' => 'standard',
                    'Livraison express' => 'express',
                    'Retrait en main' => 'retrait',
                ],
            ])

            ->add('pictures', FileType::class, [
                // 'multiple' => true pour permettre la sélection de plusieurs fichiers,
                'multiple' => true,
                // 'mapped' => false pour indiquer que ce champ ne doit pas être mappé à l'objet
                'mapped' => false,
                // 'required' => false pour le rendre facultatif. 
                'required' => false,
            ])

            //UrlType si vous souhaitez que l'utilisateur saisisse une URL de vidéo.
            ->add('video', TextType::class)
            //Si vous préférez permettre à l'utilisateur de télécharger une vidéo depuis son appareil,
            // vous pouvez utiliser le type FileType.
            //->add('video', FileType::class)
           

            // Si vous souhaitez que l'utilisateur puisse saisir manuellement la localisation, vous pouvez utiliser le type TextType
            ->add('localisation', TextType::class)

           /* Si vous préférez fournir une liste prédéfinie d'options de localisation à partir desquelles l'utilisateur peut choisir, vous pouvez utiliser le type ChoiceType 
           *->add('localisation', ChoiceType::class, [
            *       'choices' => [
            *       'Option 1' => 'option_1',
            *       'Option 2' => 'option_2',
            *       'Option 3' => 'option_3',
                    ],
            ])
            */

            // Si vous souhaitez saisir manuellement l'identifiant du vendeur, vous pouvez utiliser le type TextType comme suit :
            ->add('seller_id', TextType::class)
            /*Cependant, il est recommandé d'utiliser un champ de type EntityType si vous avez une entité Seller associée à vos vendeurs.
            * Cela permettrait de sélectionner le vendeur à partir d'une liste déroulante ou d'une boîte de recherche
            ->add('seller', EntityType::class, [
                    'class' => Seller::class,
                    'choice_label' => 'name', // Remplacez 'name' par le nom de l'attribut de votre entité Seller à afficher dans le champ
                    'placeholder' => 'Sélectionnez un vendeur', // Optionnel : affiche un libellé par défaut dans la liste déroulante
            ])*/

            /*
            Si vous souhaitez permettre à l'utilisateur de saisir manuellement l'identifiant de l'acheteur, vous pouvez utiliser le type TextType 
            */
            ->add('buyer_id', TextType::class)
            /*Cependant, si vous avez une entité Buyer associée à vos acheteurs, il est recommandé d'utiliser un champ de type EntityType. 
            Cela permettra de sélectionner l'acheteur à partir d'une liste déroulante ou d'une boîte de recherche. Voici un exemple d'utilisation du type EntityType :
                ->add('buyer', EntityType::class, [
                        'class' => Buyer::class,
                        'choice_label' => 'name', // Remplacez 'name' par le nom de l'attribut de votre entité Buyer à afficher dans le champ
                        'placeholder' => 'Sélectionnez un acheteur', // Optionnel : affiche un libellé par défaut dans la liste déroulante
                    ])*/
            ->add('save', SubmitType::class);

           // $builder->get('start_date')->addModelTransformer(new StringToDateTimeTransformer());
        
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Auctions::class,
        ]);
    }
        

}
