<?if(trim($box->nadpis)!=''&&$box->zobrazovat_nadpis==1){?><h2 class="no-print"><?=trim($box->nadpis);?></h2>
<?}?>
<?if(count($tree)>0){?> 
  <nav> 	
    <ul>  
      <li <?if(getget('module')=='FTournaments'){?>class="active"<?}?> ><a href="<?=$atournaments?>"><?=$systemTranslator['cups_cups_velke'];?></a></li>
      <?/*<li <?if(getget('module')=='FCups'){? >class="active"<?} ? > ><a href="<?=$acups? >"><?=$systemTranslator['turnaje_turnaje'];? ></a></li>*/?>
      <?if($userID>0){?>
        <li <?if(getget('module')=='FTeams'){?>class="active"<?}?> ><a href="<?=$ateams?>" title="<?=$systemTranslator['tymy_velke'];?>" ><?=$systemTranslator['tymy_velke'];?></a></li>
      <?}else{?>
        <li ><a href="<?=$areg?>" title="<?=$systemTranslator['tymy_velke'];?>" ><?=$systemTranslator['tymy_velke'];?></a></li>
      <?}?>
      <?foreach($tree as $t){
        $pos=strpos($_SERVER['REQUEST_URI'],$t->link);
        if($pos===false){}else{$t->active=1;}
        if(in_array($t->idp,$actives)){$t->active=1;}
        ?>
        <li <?if($t->active==1){?>class="active"<?}?> >
          <a href="<?=$t->link;?>" <?if($t->nove_okno==1){?>target="_blank"<?}elseif($t->nove_okno==2){?>onclick="window.open('<?=$t->link;?>', '', 'width=1024, height=768');return false;"<?}?> >
            <?=$t->nazev;?>
          </a>
        </li>
      <?}?>
    </ul>
  </nav>  
<?}?>