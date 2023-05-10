@foreach ($carsCollection as $item)
    <x-car 
        image="{{ $item['Images'] }}" 
        name="{{ $item['Model'] }}"
        description="{{$item['Description']}}"
        brand="{{ $item['Brand']}}"
        modelYear="{{ $item['Model Year'] }}"
        price="{{$item['Price/Day']}}"
        fuelType="{{$item['Fuel Type']}}"
        seat="{{$item['Seats ']}}"
        mileage="{{$item['Mileage']}}"
        category="{{$item['Category ( Sedan)']}}"
        />
@endforeach