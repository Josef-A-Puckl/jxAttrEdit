<?php

    /**
     * Metadata version
     */
    $sMetadataVersion = '2.0';

    /**
     * Module information
     */
    $aModule = [
        'id'            => 'jxattredit',
        'title'         => 'jxAttrEdit - Product Attibute Editor',
        'description'   => [
                            'de' => 'Attribut-Editor für Artikel.',
                            'en' => 'Attribute Editor for Products.'
        ],
        'thumbnail'     => 'jxattredit.png',
        'version'       => '1.0.0',
        'author'        => 'Joachim Barthel, Josef A. Puckl',
        'url'           => 'https://github.com/job963/jxAttrEdit',
        'email'         => 'jobarthel@gmail.com',
        'extend' => [
            \OxidEsales\Eshop\Application\Model\AttributeList::class => Ecs\Jx\jxAttrEdit\Model\AttributeList::class,
        ],
        'controllers' => [
            'article_jxattredit' => Ecs\Jx\jxAttrEdit\Controller\Admin\AttributeEdit::class
        ],
        'templates' => [
            'article_jxattredit.tpl' => 'jx/jxattredit/views/admin/tpl/article_jxattredit.tpl',
        ],
        'settings' => [
            [
                'group' => 'JXATTREDIT_DISPLAY',
                'name' => 'sJxAttrEditNumberOfColumns',
                'type' => 'select',
                'value' => '2',
                'constraints' => '2|3|4'
            ]
        ]
];
