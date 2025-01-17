<?php
// Custom Widget Class
class Mediplus_Custom_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'mediplus_custom_widget', // Widget ID
            __('Mediplus Custom Widget', 'mediplus'), // Widget Name
            array('description' => __('A custom widget for Mediplus theme', 'mediplus')) // Widget Description
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        echo '<p>' . esc_html__('This is a Mediplus custom widget!', 'mediplus') . '</p>';
        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Default Title', 'mediplus');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'mediplus'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;
    }
}

// Register the Widget
function register_mediplus_custom_widget() {
    register_widget('Mediplus_Custom_Widget');
}
add_action('widgets_init', 'register_mediplus_custom_widget');
?>

