<section>
  <h1>Events</h1>

<input class="toggle" id="toggle" type="checkbox" checked>
<label for="toggle">Filters tonen</label>
<div cass="expand" id="expand">
  <section>
    <input type="reset">
      <!-- <input type="button" onclick="verwijderFilters()" value="Verwijder filters"> -->

    <form id="filters">
      <p>Datum</p>
      <input type="date" name="bday">

      <p>Locatie</p>
      <ul>
        <?php foreach($locations as $location): ?>
            <li><input type="checkbox" name="<?php echo $location['name'];?>" value="<?php echo $location['name'];?>"><?php echo $location['name'];?></li>
        <?php endforeach;?>


      </ul>

      <p>tags</p>
      <ul>
      <?php foreach($tags as $tag): ?>
            <li><input type="checkbox" name="<?php echo $tag['tag'];?>" value="<?php echo $tag['tag'];?>"><?php echo $tag['tag'];?></li>
      <?php endforeach;?>
      </ul>
    </form>
  </section>
</div>



  <?php foreach($events as $event): ?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <!-- <dt>end</dt><dd><?php echo $event['end'];?></dd> -->
        <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
        <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
      </dl>
    </article>
  <? endforeach;?>
</section>
