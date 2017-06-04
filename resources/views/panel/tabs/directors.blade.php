<ul class="nav nav-tabs tabs-primary hidden-xs">
    <li class="active">
      {{ link_to_route('panelDirectors.profile.edit', $title = 'Perfil',
      $attributes = [Session::get('director_id')]) }}
    </li>
    <li>
        {{ link_to_route('panelDirectors.classrooms.index', $title = 'Clases',
        $parameters = [], $attributes = []) }}
    </li>
    <li>
        {{ link_to_route('panelDirectors.teachers.index', $title = 'Profesores',
        $parameters = [], $attributes = []) }}
    </li>
    <li>
      {{ link_to_route('panelDirectors.calendarEvents', $title = 'Calendario',
      $parameters = [], $attributes = []) }}
    </li>
</ul>
