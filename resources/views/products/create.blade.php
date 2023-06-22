@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-7">
            <div class="card">
                <div class="card-header">Upload Excel</div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post" id="uploadProductForm">
                        @csrf
                        <div id="attributesContainer">
                            <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center attributeRow mb-3">
                                <div class="col">
                                    <input type="text" class="form-control attributeName" name="attributes[0][name]" placeholder="Name of the attribute">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control attributeValue" name="attributes[0][value]" placeholder="Value of the attribute">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" form="uploadProductForm" class="btn btn-sm btn-primary">Upload</button>
                    <button class="btn btn-sm btn-success" id="addAttributeBtn" type="button">Add New Attribute</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Add new attribute
        document.getElementById("addAttributeBtn").addEventListener("click", function() {
            var attributeContainer = document.getElementById("attributesContainer");
            var lastRowIndex = attributeContainer.getElementsByClassName("attributeRow").length;

            // Clone the last attribute row
            var lastAttributeRow = attributeContainer.getElementsByClassName("attributeRow")[lastRowIndex - 1];
            var newAttributeRow = lastAttributeRow.cloneNode(true);

            // Update the input field names and clear the values
            var attributeInputs = newAttributeRow.getElementsByTagName("input");
            for (var i = 0; i < attributeInputs.length; i++) {
                var input = attributeInputs[i];
                var attributeName = "attributes[" + lastRowIndex + "][name]";
                var attributeValue = "attributes[" + lastRowIndex + "][value]";
                input.name = (input.className === "form-control attributeName") ? attributeName : attributeValue;
                input.value = "";
            }

            // Append the new attribute row to the container
            attributeContainer.appendChild(newAttributeRow);
        });
    });
</script>
@endsection