<!-- Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Model', 'Product Model:') !!}
    {!! Form::text('Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Price', 'Product Price:') !!}
    {!! Form::number('Product_Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Customer_Name', 'Customer Name:') !!}
    {!! Form::text('Customer_Name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Bought Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date_Bought', 'Date Bought:') !!}
    {!! Form::text('Date_Bought', null, ['class' => 'form-control','id'=>'Date_Bought']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date_Bought').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Warranty_Code', 'Warranty Code:') !!}
    {!! Form::text('Warranty_Code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>