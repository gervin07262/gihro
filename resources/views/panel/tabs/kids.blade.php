<ul class="nav nav-tabs tabs-primary hidden-xs">
    <li class="active">
        <a href="#profile" data-toggle="tab">Perfil</a>
    </li>
    <li>
        {{ link_to('panelKids/kids/'.Session::get('kid_id').'/reviews', $title = 'Agenda',
        $attributes = [], $secure = null) }}
    </li>
</ul>
