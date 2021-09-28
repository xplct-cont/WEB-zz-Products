<!-- Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Brand', 'Product Brand:') !!}
    {!! Form::text('Product_Brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Model', 'Product Model:') !!}
    {!! Form::text('Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>