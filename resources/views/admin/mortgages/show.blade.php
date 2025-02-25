@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Просмотр ипотеки</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $mortgage->title }}</h5>
            <p class="card-text"><strong>Активна:</strong> {{ $mortgage->is_active ? 'Да' : 'Нет' }}</p>
            <p class="card-text"><strong>Описание:</strong> {{ $mortgage->description }}</p>
            <p class="card-text"><strong>Процентная ставка:</strong> {{ $mortgage->percent }}%</p>
            <p class="card-text"><strong>Минимальный первоначальный взнос:</strong> {{ $mortgage->min_first_payment }}%</p>
            <p class="card-text"><strong>Цена недвижимости:</strong> от {{ $mortgage->min_price }} до {{ $mortgage->max_price }}</p>
            <p class="card-text"><strong>Срок ипотеки:</strong> от {{ $mortgage->min_term }} до {{ $mortgage->max_term }} месяцев</p>
            <a href="{{ route('admin.mortgages.edit', $mortgage->id) }}" class="btn btn-warning">Редактировать</a>
            <a href="{{ route('admin.mortgages.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
</div>
@endsection