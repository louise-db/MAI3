<section class="agendaPage">
  <h3>Agenda</h3>
  <!-- <input type="reset">
    <! <input type="button" onclick="verwijderFilters()" value="Verwijder filters"> -->

<input class="toggle" id="toggle" type="checkbox" checked>
<label for="toggle">Filters tonen</label>

<div class="expand" id="expand">
  <section>
    <form class="filters">
      <div class="filter1">
        <p>Datum</p>
        <input type="date" name="eday">
      </div>

      <div class="filter2">
        <p>Locatie</p>
        <ul>
          <?php foreach($locations as $location): ?>
              <li>
                <input type="checkbox" id="<?php echo $location['name'];?>" class="<?php echo $location['name'];?>" name="checkboxlocation>" value="<?php echo $location['name'];?>">
                <label for="<?php echo $location['name'];?>"><?php echo $location['name'];?></label>
              </li>
          <?php endforeach;?>
        </ul>
      </div>

      <div class="filter3">
        <p>Tags</p>
        <ul>
          <?php foreach($tags as $tag): ?>
              <li>
                <input type="checkbox" id="<?php echo $tag['tag'];?>" class="<?php echo $tag['tag'];?>" name="<?php echo $tag['tag'];?>" value="<?php echo $tag['tag'];?>">
                <label for="<?php echo $tag['tag'];?>"><?php echo $tag['tag'];?></label>
              </li>
          <?php endforeach;?>
        </ul>
      </div>
    </form>
    <div class="filtersBg"></div>
  </section>
</div>

  <h4>Evenementen</h4>
  <section class="searchResults">
  <?php foreach($events as $event): ?>
      <article>
        <header><h2><?php echo $event['title']; ?></h2></header>
        <dl>
          <!-- <dt>start</dt> -->
          <!-- <dt>end</dt><dd><?php echo $event['end'];?></dd> -->
          <!-- <dt>organiser</dt>
          <dd><?php echo $event['organiser'];?></dd>
          <dt>title</dt> -->
          <!-- <dd><?php echo $event['title'];?></dd> -->
          <!-- <dt>locaties</dt> -->
          <dd class="location">
            <ul><?php foreach($event['locations'] as $location): ?>
              <li>
                <?php echo $location['name'];?>
              </li>
            <?php endforeach;?></ul>
          </dd>

          <dd class="time"><?php echo $event['start'];?></dd>

          <!-- <dt>description</dt> -->
          <dd>
            <div class="descrBox">
              <p>
                <?php echo $event['description'];?>
              </p>
            </div>
          </dd>

          <!-- <dt>tags</dt> -->
          <dd class="tags">
            <ul><?php foreach($event['tags'] as $tag): ?>
              <li>#<?php echo $tag['tag'];?></li>
            <?php endforeach;?></ul>
          </dd>
        </dl>
      </article>
  <? endforeach;?>
  </section>
</section>
