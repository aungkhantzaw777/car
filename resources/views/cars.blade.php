@foreach ($carsCollection as $item)
    <x-car 
        id="{{ $item['id'] }}"
        image="{{ $item['Images'] }}" 
        name="{{ $item['Model'] }}"
        description="{{$item['Description']}}"
        brand="{{ $item['Brand']}}"
        modelYear="{{ $item['ModelYear'] }}"
        price="{{$item['Price/Day']}}"
        fuelType="{{$item['FuelType']}}"
        seat="{{$item['Seats']}}"
        mileage="{{$item['Mileage']}}"
        category="{{$item['Category']}}"
        avaliable="{{$item['Availability']}}"
        />
@endforeach