@extends('layouts.site')

@section('title', $title ?? 'trang chủ')
@section('header')
@endsection
@section('content')
    <div class="container mt-5">
        @includeIf('backend.messageAlert', ['some' => 'data'])
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-12 mt-2">
                                    <label for="name">Tên người nhận</label>
                                    <input type="text" id="name" name="name"
                                        value="{{ Auth::guard('users')->user()->name }}" class="form-control"
                                        placeholder="Name">
                                    @if ($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="">Email người nhận</label>
                                    <input type="email" id="email" name="email"
                                        value="{{ Auth::guard('users')->user()->email }}" class="form-control"
                                        placeholder="email">
                                    @if ($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="phone">Điện thoại người nhận</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        value="{{ Auth::guard('users')->user()->phone }}" placeholder="phone">
                                    @if ($errors->has('phone'))
                                        <div class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="address">Địa chỉ nhận hàng</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="{{ Auth::guard('users')->user()->address }}" placeholder="address">
                                    @if ($errors->has('address'))
                                        <div class="text-danger">
                                            {{ $errors->first('address') }}
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>orderdetail</h6>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th class="col-md-6 col-sm-2 col-2 align-middle text-center">Tên sản phẩm</th>
                                        <th class="col-md-3 col-sm-2 col-2 align-middle text-center">Giá</th>
                                        <th class="col-md-3 col-sm-2 col-2 align-middle text-center">Số lượng</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($data as $row)
                                            <tr class="product_data">


                                                <td>
                                                    {{ $row->products->name }}
                                                </td>
                                                <td>
                                                    @if ($row->products->sale && $row->products->sale->date_begin <= now() && $row->products->sale->date_end >= now())
                                                        {{ number_format($row->products->sale->price_sale) }}đ
                                                    @else
                                                        {{ number_format($row->products->price_buy) }}đ
                                                    @endif
                                                </td>


                                                <td class="text-center">
                                                    {{ $row->product_qty }}

                                                </td>

                                                @php
                                                    $total += $row->product_qty * ($row->products->sale && $row->products->sale->date_begin <= now() && $row->products->sale->date_end >= now() ? $row->products->sale->price_sale : $row->products->price_buy);
                                                @endphp



                                            </tr>
                                        @endforeach
                                    @else
                                        <img src="https://anphapetrol.store/img/empty-cart__G35z9.png" alt="">
                                    @endif
                                </tbody>


                            </table>
                            <hr>
                            <button type="submit " class="btn btn-outline-success w-100 placeOrderBtn">Place order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')

@endsection
