<h1 class="text-center" style="font-weight: 100;">Welcome to <span style="font-weight:bold">{{ config('lorekeeper.settings.site_name', 'Lorekeeper') }}</span></h1>
<!-- <h2>Status:</h2> {!! $about->parsed_text !!} -->
<div class="row justify-content-center no-gutters p-4 mb-4" style="display: flex;
    align-items: center;">
  <img src="{{ asset('images/intro.png') }}" alt="Characters" class="img-fluid justify-content-center col-md-4 col-1 2 mr-3" style="min-width: 150px; max-width:300px;object-fit: cover;"/>
  <!-- <div class="">
  </div> -->
  <div class="col-md-6 col-12">
    <p class="fs-1" style="font-size: larger;">
      Hello and welcome to the guide for the species Avira, also known as Guardians of Aija. Here you will find all the information you need from basic information, design guides, masterlist, events, and more.
    </p>
    <hr>
    <p class="fs-4" style="font-size: larger;">
      Guardians of Aija: Avira is an interactive art role-play group where players are able to experience a world of magic, mystery, and conflict. The group's main focus is art, where players start as a small wisp that has been gifted some special abilities as well as a fox form which they can use to protect their new home. By completing quests and attending events players can collect new abilities, pets, racial mutations, and other fun goodies. For more information please check out the links above.
    </p>
  </div>
</div>

<!-- List elements -->
<div class="row justify-content-center" style="min-height:400px">
<!-- col-md-2 for smaller, col-md-3 for larger -->
  <div class="col-md-2 col-12 mb-4">
    <div class="card">
      <a href="#lore" data-toggle="collapse" area-expanded="false" class="card-header text-center mx-0 px-0">
        <h5 class="card-title mb-0">
          <div title="Specie Informaion">Lore <em class="fas fa-caret-down">&nbsp;</em></div>
        </h5>
      </a>
      <div id="lore" class="collapse">
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item"><a href="{{ url('info/lore_lifestyle') }}">Lifestyle</a></li>
          <li class="list-group-item"><a href="{{ url('info/lore_forms')}}">Forms</a></li>
          <li class="list-group-item"><a href="{{ url('info/lore_abilities')}}">Abilities</a></li>
          <li class="list-group-item"><a href="{{ url('info/lore_weakness')}}">Weakness</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-12 mb-4">
    <div class="card">
      <a a href="#guides" data-toggle="collapse" area-expanded="false" class="card-header text-center mx-0 px-0">
        <h5 class="card-title mb-0">
          <div>Guides <em class="fas fa-caret-down">&nbsp;</em></div>
        </h5>
      </a>
      <div id="guides" class="collapse">
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item"><a href="https://toyhou.se/~world/139764.guardians-of-aija-avira/page/101998.obtaining-an-avira" title="Exteral link">Obtaining an Avira</a></li>
          <li class="list-group-item"><a href="https://toyhou.se/~world/139764.guardians-of-aija-avira/page/99635.design-guide" title="Exteral link">Design Guide</a></li>
          <li class="list-group-item"><a href="https://toyhou.se/~world/139764.guardians-of-aija-avira/page/104496.fox-import-guide" title="Exteral link">Fox Import Guide</a></li>
          <li class="list-group-item"><a href="https://toyhou.se/~world/139764.guardians-of-aija-avira/page/103351.wisp-import-guide" title="Exteral link">Wisp Import Guide</a></li>
          <!-- <li class="list-group-item"><a href="#">(Dire Import Guide)</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-12 mb-4">
    <div class="card">
      <a a href="#activities" data-toggle="collapse" area-expanded="false" class="card-header text-center mx-0 px-0">
        <h5 class="card-title mb-0">
          <div>Activities <em class="fas fa-caret-down">&nbsp;</em></siv>
        </h5>
      </a>
      <div id="activities" class="collapse">
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item"><a href="#">Eventing (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Questing (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Crafting (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Hunting (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Gathering (Coming soon..)</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-12 mb-4">
    <div class="card">
      <a href="#database" data-toggle="collapse" area-expanded="false" class="card-header text-center mx-0 px-0">
        <h5 class="card-title mb-0">
          <div>Database <em class="fas fa-caret-down">&nbsp;</em></div>
        </h5>
      </a>
      <div id="database" class="collapse">
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item"><a href="#">Currency (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Familiars</a></li>
          <li class="list-group-item"><a href="#">Achievements</a></li>
          <li class="list-group-item"><a href="#">Body Art (Coming soon..)</a></li>
          <li class="list-group-item"><a href="#">Adornments (Coming soon..)</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-12 mb-4">
    <div class="card">
      <a href="#s-media" data-toggle="collapse" area-expanded="false" class="card-header text-center mx-0 px-0">
        <h5 class="card-title mb-0">
          <div>Social Media <em class="fas fa-caret-down">&nbsp;</em></div>
        </h5>
      </a>
      <div id="s-media" class="collapse">
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item"><a href="#">Admins</a></li>
          <li class="list-group-item"><a href="https://discord.gg/nXufqaNBXA">Discord</a></li>
          <li class="list-group-item"><a href="https://www.deviantart.com/goa-avira">DeviantArt</a></li>
          <li class="list-group-item"><a href="#">Ko-Fi</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>