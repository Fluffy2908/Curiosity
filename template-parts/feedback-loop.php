<?php
/**
 * Template part for displaying a single feedback quote
 *
 * @param array $args expects $args['item'] with 'text' and 'image'
 */

if (!isset($args['item']) || !is_array($args['item'])) {
    echo '<!-- ⚠️ Invalid quote item -->';
    return;
}

$item = $args['item'];

$text = isset($item['text']) ? esc_html($item['text']) : '';
$image_url = '';

if (is_array($item['image']) && isset($item['image']['url'])) {
    $image_url = esc_url($item['image']['url']);
} elseif (!empty($item['image'])) {
    $image_url = esc_url($item['image']);
}
?>

<div class="quote-item p-4 border rounded text-center">
    <?php if ($image_url): ?>
        <img src="<?php echo $image_url; ?>" alt="" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover" />
    <?php endif; ?>

    <?php if ($text): ?>
        <p class="text-gray-700 text-sm"><?php echo $text; ?></p>
    <?php endif; ?>
</div>
