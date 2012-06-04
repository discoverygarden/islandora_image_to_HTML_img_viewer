<?php
/**
 * @file
 *   This file is the template to show list containing image data.
 *
 * @param mixed image_data
 */

?>
<div class="islandora_image_to_HTML_img_viewer">
<?php
// From adam's collection view.
  $obj_path = "fedora/repository/{$result['object']}";

      //Get a thumbnail
      $tn_path = ($result['thumbnail'] ?
        "fedora/repository/{$result['thumbnail']}":
        "$obj_path/TN");

      $thumbnail = _fedora_repository_render_image($tn_path);
?>
</div>
