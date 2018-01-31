@include('partials.add_to_schedule')

<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Día</th>
            <th>Hora de entrada</th>
            <th>Hora de salida</th>
        </thead>
        <tbody>
            <tbody>
                @foreach($user->schedule->entries as $entry)
                <tr>
                    <td>{{ $entry->day() }}</td>
                    <td>{{ $entry->start }}</td>
                    <td>{{ $entry->end }}</td>
                </tr>
                @endforeach
            </tbody>
        </tbody>
    </table>
</div>