<?php
if( !defined( 'ABSPATH' ) )
    exit;

$options = array(
  'survey-settings' =>   array(

      'section_survey_settings'     => array(
          'name' => __( 'Survey Option', 'yith-woocommerce-surveys' ),
          'type' => 'title',
          'id'   => 'ywcsur_section_general'
      ),


      'survey_option'   => array(
            'name'  =>  __( 'Manage Survey', 'yith-woocommerce-surveys' ),
            'id'    =>  'ywcsur_free_survey_opt',
            'type'  =>  'survey_options',
            'default'   => ''
        ),

      'section_survey_settings_end' => array(
          'type' => 'sectionend',
          'id'   => 'ywcsur_section_general_end'
      )

  )
);


return apply_filters( 'yith_wc_survey_free_options', $options );