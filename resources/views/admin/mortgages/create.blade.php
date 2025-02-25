@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить ипотеку</h1>
    <form action="{{ route('admin.mortgages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="is_active">Активна</label>
            <select name="is_active" id="is_active" class="form-control">
                <option value="1">Да</option>
                <option value="0">Нет</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="percent">Процентная ставка</label>
            <input type="number" name="percent" id="percent" class="form-control" max="40" required>
        </div>
        <div class="form-group">
            <label for="min_first_payment">Минимальный первоначальный взнос (%)</label>
            <input type="number" name="min_first_payment" id="min_first_payment" class="form-control" max="98" required>
        </div>
        <div class="form-group">
            <label for="min_price">Минимальная цена</label>
            <input type="number" name="min_price" id="min_price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="max_price">Максимальная цена</label>
            <input type="number" name="max_price" id="max_price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="min_term">Минимальный срок (месяцы)</label>
            <input type="number" name="min_term" id="min_term" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="max_term">Максимальный срок (месяцы)</label>
            <input type="number" name="max_term" id="max_term" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
