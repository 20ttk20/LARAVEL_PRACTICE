@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">予約登録<div>

                <div class="card-body">
                @include('components.alert')
                <form method="POST" action="{{ route('reservations.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="inputRoom_name" class="col-sm-2 col-form-lavel">お部屋の種類</label>
                        <div class="col-sm-10">
                            <select name="room_name" id="form-control">
                                <option value="未選択">選択してください</option>
                                <option value="松の間">松の間</option>
                                <option value="竹の間">竹の間</option>
                                <option value="梅の間">梅の間</option>
                                <option value="桜の間">桜の間</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcheckin" class="col-sm-2 col-form-lavel">CheckIn</label>
                        <div class="col-sm-10"><input type="datetime-local" name="checkin" class="form-control" id="inputRoom_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputcheckout" class="col-sm-2 col-form-lavel">CheckOut</label>
                        <div class="col-sm-10"><input type="datetime-local" name="checkout" class="form-control" id="inputRoom_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">予約完了</button>
                            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">予約一覧に戻る</a>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
