<?php

/**
 * @file
 * API documentation for the zebra_image module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter an image as it is loaded by the zebra_image toolkit.
 *
 * @param $image
 *   An image object.
 *
 * @see image_load()
 * @see image_zebra_image_load()
 */
function hook_zebra_image_load_alter(stdClass $image) {
}

/**
 * Alter an image before it is saved by the zebra_image toolkit.
 *
 * @param $image
 *   An image object.
 * @param $context
 *   An associative array of information about the image being saved:
 *   - destination: The file URI where $image will be saved to.
 *
 * @see image_save()
 * @see image_zebra_image_save()
 */
function hook_zebra_image_save_alter(stdClass $image, $context = array()) {
}

/**
 * Alter the arguments to the zebra_image 'convert' command-line program.
 *
 * @param $args
 *   An array of arguments to the zebra_image 'convert' command-line program.
 * @param $context
 *   An associative array of information about the image being altered:
 *   - source: The filesystem path of the original image.
 *   - source_original: The original file URI of the image.
 *   - destination: The filesystem path for the derivative image.
 *   - destination_original: The original file URI for the derivative image.
 *   - destination_format: The target image format for the derivative image.
 *     Defaults to an empty string.
 *
 * zebra_image automatically converts the target image to the format denoted by
 * the file extension. However, since changing the file extension is not always
 * an option (e.g., for derivative images of core Image module styles), you can
 * specify an alternative derivative image format in
 * $context['destination_format']. 'destination_format' is a string denoting a
 * file extension. If not empty, it is passed to zebra_image's convert binary in
 * the syntax "[destination_format]:[destination]".
 *
 * @see http://www.zebra_image.org/script/command-line-processing.php#output
 * @see http://www.zebra_image.org/Usage/files/#save
 *
 * @see _zebra_image_convert()
 */
function hook_zebra_image_arguments_alter($args, $context = array()) {
}

