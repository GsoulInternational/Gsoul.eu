<br />
<table>
    <tr>
      <th>Šablona zobrazení</th>        
    </tr>
    <tr>
      <td>
        <select name="sablona" class="width-740">
          <?foreach($sablony as $sk=>$sv){?>
            <option <?if($sk==$box->sablona){?>selected<?}?> value="<?=$sk;?>"><?=$sv;?></option>
          <?}?>
        </select>
      </td>        
    </tr>
    <tr>
      <th>Fotogalerie</th>        
    </tr>
    <tr>
      <td>
        <select name="int_1" class="width-740">
          <?foreach($fotogalerie as $ft){?>
            <option <?if($ft->idic==$box->int_1){?>selected<?}?> value="<?=$ft->idic;?>"><?=$ft->nazev;?></option>
          <?}?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Pořadí fotografií</th>        
    </tr>
    <tr>
      <td>
        <select name="text_1" class="width-740">
          <?foreach($poradi as $pk=>$pv){?>
            <option <?if($pk==$box->text_1){?>selected<?}?> value="<?=$pk?>"><?=$pv;?></option>
          <?}?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Počet zobrazovaných fotografií</th>        
    </tr>
    <tr>
      <td>
        <input type="text" name="int_2" value="<?=$box->int_2?>" class="width-740" />        
      </td>
    </tr>
    <tr>
      <td align="right"><input type="submit" value="Uložit prvek" /></td>
    </tr>
</table>    