<ul class="BackendLeftMenu">
  <?foreach($menu as $km=>$vm){?>
    <li <?if($km==$active){?>class="active"<?}?> >
      <a href="<?=$km;?>">
        <?=$vm;?>
      </a>
    </li>  
  <?}?>
</ul>