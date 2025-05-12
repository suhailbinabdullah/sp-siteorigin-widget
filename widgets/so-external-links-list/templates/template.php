<?php
$links = $instance['links'];
$link_color = $instance['link_color'];
$hover_color = $instance['hover_color'];
$list_type = $instance['list_type'];
$list_style_image_id = $instance['list_style_image'];
$list_style_image_url = wp_get_attachment_url($list_style_image_id);
$list_padding = $instance['list_padding'];

$list_tag = ($list_type === 'ol') ? 'ol' : 'ul';

// Create unique ID to scope styles
$unique_id = uniqid('external-links-');
?>

<style>
    <?php $id_selector = '#' . esc_attr($unique_id); ?>

    <?php echo $id_selector; ?> {
        <?php if (!empty($list_style_image_url)) : ?>
        list-style: none;
        <?php endif; ?>
    }

    <?php echo $id_selector; ?> li {
        padding: <?php echo esc_attr($list_padding); ?>;
        <?php if (!empty($list_style_image_url)) : ?>
        background: url('<?php echo esc_url($list_style_image_url); ?>') no-repeat left center;
        background-size: 16px 16px;
        padding-left: calc(<?php echo esc_attr($list_padding); ?> + 24px);
        <?php endif; ?>
    }

    <?php echo $id_selector; ?> a {
        color: <?php echo esc_attr($link_color); ?>;
        transition: color 0.3s ease;
        text-decoration: none;
    }

    <?php echo $id_selector; ?> a:hover {
        color: <?php echo esc_attr($hover_color); ?>;
    }
</style>



<<?php echo $list_tag; ?> class="external-links-list" id="<?php echo $unique_id; ?>">
    <?php foreach ( $links as $link ): ?>
        <li>
            <a href="<?php echo esc_url($link['link_url']); ?>" target="_blank" rel="noopener noreferrer">
                <?php echo esc_html($link['link_text']); ?>
            </a>
        </li>
    <?php endforeach; ?>
</<?php echo $list_tag; ?>>
