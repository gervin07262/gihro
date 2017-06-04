<ul class="nav nav-tabs tabs-primary hidden-xs">
    <li class="active">
        {{ link_to('panelTeachers/profile/'.session('teacher_id').'/edit', $title = 'Perfil',
        $attributes = [], $secure = null) }}
    </li>
    <li>
        {{ link_to_route('panelTeachers.kids.index', $title = 'Niños', $parameters = [], $attributes = []) }}
    </li>
    <li>
        {{ link_to_route('panelTeachers.calendarEvents', $title = 'Calendario', $parameters = [], $attributes = []) }}
    </li>
    <li>
          {{ link_to_route('panelTeachers.menusList', $title = 'Menús', $parameters = ['id' => session('classroom_id') ], $attributes = []) }}
    </li>
</ul>
