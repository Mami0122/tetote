<?php
//  このテンプレートを使用する際はget_template_partの第三引数で下記の内容を連想配列として渡してください。 

// 1．パンくずが1階層の場合（例：HOME → about等）
//   'text' => array('パンくずのテキスト')

// 2.パンくずが2階層の場合（例：HOME → 〇〇 → 〇〇等）
//   'text' => array('パンくずのテキスト', 'パンくずのテキスト')
//   'slug' => array('スラッグ名') //2番目のパンくずのスラッグを指定

if(isset($args)):
?>

<nav class="c-breadcrumbs" aria-label="パンくずリスト">
  <ol class="c-breadcrumbs__list">
    <li class="c-breadcrumbs__listItem">
      <a class="c-breadcrumbs__listItemLink" href="<?php echo esc_url( home_url('/') ); ?>">TOP</a>
    </li>
<?php
  if(count($args['text']) >= 2):
    for($i = 0; $i < count($args['text']); $i++):
      if($i === 0):
?>
    <li class="c-breadcrumbs__listItem">
      <a href="<?php echo esc_url( home_url('/') ) . $args['slug']; ?>" class="c-breadcrumbs__listItemLink">
        <?php echo $args['text'][$i]; ?>
      </a>
    </li>
<?php
      else:
?>    
    <li class="c-breadcrumbs__listItem" aria-current="page">
      <?php echo $args['text'][$i]; ?>
    </li>
<?php
      endif;
    endfor;
  else:
?>
    <li class="c-breadcrumbs__listItem" aria-current="page">
      <?php echo $args['text'][0]; ?>
    </li>
<?php
  endif;
?>
  </ol><!-- /.c-breadcrumbs__list -->
</nav><!-- /.c-breadcrumbs -->

<?php 
endif; 
?>
