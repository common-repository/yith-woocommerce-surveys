<?php
if(!defined( 'ABSPATH' ) )
    exit;

$free_survey_id = get_option( 'yith_wc_free_survey_id', -1 );

$title = get_the_title( $free_survey_id );
$title = $title ? $title  : '';
?>

<tr valign="top">
    <th scope="row" class="titledesc">
        <label for="<?php esc_attr_e( $value['id'] );?>_title"><?php _e( 'Survey Title', 'yith-woocommerce-surveys' );?></label>
    </th>
    <td class="forminp">
        <input type="text" id="<?php esc_attr_e( $value['id'] );?>_title" class="yith_survey_title" placeholder="<?php _e( 'Enter a title for the survey', 'yith-woocommerce-surveys' );?>" value="<?php esc_attr_e( $title );?>"  name="yith_survey_title">
        <input type="hidden" name="yith_survey_visible_in" value="checkout">
        <input type="hidden" name="yith_survey_wc_handle" value="after_order_notes" >
    </td>
</tr>
<tr valign="top">
    <th scope="row" class="titledesc">
        <label for="<?php esc_attr_e( $value['id'] );?>_answers"><?php _e( 'Survey Answers', 'yith-woocommerce-surveys' );?></label>
    </th>
    <td class="forminp <?php esc_attr_e( $value['id'] );?>_answers_container">
        <?php
        $args = array(
            'post_parent' => $free_survey_id,
            'orderby'   => 'meta_value',
            'order' => 'ASC',
            'meta_key' => '_yith_survey_position',
            'meta_query' => array(
                    array(
                        'key' => '_yith_answer_visible_in_survey',
                        'value'   => 'yes'
                        )
                    ),
                'relation' => 'AND'
        );
        $children_ids = YITH_Surveys_Type()->get_survey_children( $args );
        $loop = 0;
        ?>

        <ul class="suverys_answers">
            <?php
            if( $children_ids ) :
                foreach( $children_ids as $child_id ):
                    $answer =  get_the_title( $child_id );
                    $answer = $answer ? $answer : '';
                    $position = get_post_meta( $child_id, '_yith_survey_position', true );
                    $params = array(
                        'loop' => $loop,
                        'answer'    => $answer,
                        'post_id'   => $child_id
                    );
                    $params['params'] = $params;
                    wc_get_template( 'admin/surveys_answer.php', $params,'', YITH_WC_SURVEYS_TEMPLATE_PATH );
                $loop++;
                endforeach;
            endif;
            ?>
        </ul>

        <div class="surveys_error" style="display: none">
            <span class="surveys_icon dashicons dashicons-no"></span>
            <span class="survey_error_text"><?php _e( 'You have reached the maximum number of elements: delete or edit exiting ones', 'yith-woocommerce-surveys' );?></span>
        </div>
        <input type="submit" class="button-secondary add_answer" value="<?php _e( 'Add Survey Answer','yith-woocommerce-surveys' );?>">
    </td>
</tr>
<input type="hidden" name="save_survey" value="yes">