@extends('layouts.app')
@section('content')

    <div class="container">
        <h3>Novo pedido</h3>

        {{--@include('erros._check')--}}
        <div class="container">
            {!! Form::open(['route' => 'customer.order.store', 'class' => 'form']) !!}

            <div class="form-group">
                <label>Total: <span id="total"></span></label>

                <p><a id="btnNewItem" class="btn btn-default">Novo Item</a></p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <select name="items[0][product_id]" id="item" class="form-control">
                                @foreach($products as $p)
                                    <option value="{{ $p->id }}" data-price="{{ $p->price }}">{{ $p->name }}
                                        ---- {{ $p->price }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            {!! Form::text('items[0][qtd]', 1, ['class' => 'form-control']) !!}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <input type="submit" value="criar pedido" class="btn btn-primary">
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('post-script')
    <script>
        $("#btnNewItem").click(function() {
            var row = $('table tbody > tr:last');
            var newRow = row.clone();
            var length = $('table tbody tr').length;
            newRow.find('td').each(function() {
                var td = $(this);
                var input = td.find('input,select');
                var name = input.attr('name');
                input.attr('name', name.replace("[" + (length - 1) + "]", "[" + length + "]"));
            });

            newRow.find('input').val(1);
            newRow.insertAfter(row);
            calculateTotal();
            return false;
        });

        $(document.body).on('click', 'select', function(){
            calculateTotal();
        });

        $(document.body).on('blur', 'input', function(){
            calculateTotal();
        });

        function calculateTotal() {
            var total = 0;
            var trLen = $('table tbody tr').length;
            var tr = null, price, qtd;

            for(var i = 0; i < trLen; i++) {
                tr = $('table tbody tr').eq(i);
                price = tr.find(':selected').data('price');
                qtd = tr.find('input').val();
                total += price * qtd;
            }

            $("#total").html(total);
        }
    </script>
@endsection