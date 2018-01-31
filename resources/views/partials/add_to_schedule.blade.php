<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_to_schedule_modal">
  Agregar
</button>

<!-- Modal -->
<div class="modal fade" id="add_to_schedule_modal" tabindex="-1" role="dialog" aria-labelledby="add_to_schedule_modal_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ action('ScheduleController@addEntry') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="add_to_schedule_modal_label">Entrada de horario</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>
              Día
              <select name="day" class="form-control">
                <option value=""></option>
                @foreach($user->schedule->daysLeft() as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </label>
          </div>
          <div class="form-group">
            <label>
              Entrada
              <input type="time" class="form-control" name="start" />
            </label>
          </div>
          <div class="form-group">
            <label>
              Salida
              <input type="time" class="form-control" name="end" />
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>