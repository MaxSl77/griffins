@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('admin.events.store')}}" method="POST" >

    @csrf

    <label for="datetime">Дата и время:</label><br>
    <input type="datetime-local" id="datetime" name="datetime"><br>

    <label for="place">Место:</label><br>
    <input type="text" id="place" name="place"><br><br>


    <label for="type"> Тип события:</label><br>
    <input type="text" id="type" name="type"><br><br>

    <label for="description"> Описание:</label><br>
    <input type="text" id="description" name="description"><br><br>

    <label for="locker_room"> Раздевалка:</label><br>
    <input type="text" id="locker_room" name="locker_room"><br><br>

    <p><select name="teams[]" multiple="multiple">
            <option disabled>Выберите команд</option>
            @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>


    <input type="submit" value="Submit">
</form>
