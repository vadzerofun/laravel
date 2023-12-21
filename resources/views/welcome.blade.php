<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body class="antialiased">
        @extends('layouts.app')

        @section('content')

        <div class="container">            
            <div class="row justify-content-center">
                @include('sidebar')                
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card p-2 mb-4">
                                <div class="card-body">                                    
                                    <h2 class="text-center fw-bold">
                                        Welcome to Spiderboard - Your Ultimate Delivery Tracker!
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4>Our services:</h4>
                                    <div class="services">
                                        <div class="services-item">
                                            <div class="services-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="64" width="64" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                    <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                                </svg>
                                            </div>
                                            <div class="services-text">
                                                <h5><a>Main services</a></h5>
                                                <p>Arranging to transport customer shipments across Ukraine.</p>
                                            </div>        
                                        </div>
                                        <div class="services-item">
                                            <div class="services-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="64" width="64" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                    <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                                                </svg>
                                            </div>
                                            <div class="services-text">
                                                <h5><a>Additional services</a></h5>
                                                <p>Services that are provided in addition to the main services and solve specific client tasks for an additional fee.</p>
                                            </div>        
                                        </div>
                                        <div class="services-item">
                                            <div class="services-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="64" width="64" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                    <path d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z"/>
                                                </svg>
                                            </div>
                                            <div class="services-text">
                                                <h5><a>Sale of packages</a></h5>
                                                <p>The oppportunity to purchase packages online.</p>
                                            </div>        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card p-2">
                                <div class="card-body">
                                    <div class="delivery mb-3">
                                        <div class="delivery-item">
                                            <div class="delivery-item-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                            </div>
                                            <div class="delivery-item-content">
                                                <p class="mb-0">Track</p>
                                                <div class="input-group mb-0">
                                                    <input id="input-order-id" type="text" class="form-control" placeholder="Package number" aria-label="Package number" aria-describedby="button-addon2">
                                                    <a
                                                     href="javascript:void(0)"
                                                     id="show-order"
                                                     data-url="{{route('order.show', 0)}}"
                                                     class="btn btn-outline-secondary">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="delivery">
                                        <li class="delivery-item">
                                            <a class="delivery-item-link">
                                                <div class="delivery-item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z"/></svg>
                                                </div>
                                                <div class="delivery-item-content">
                                                    <p class="mb-0">Calculate price</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="delivery-item">
                                            <a class="delivery-item-link">
                                                <div class="delivery-item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h16V98.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6V64h16c17.7 0 32-14.3 32-32s-14.3-32-32-32H224 176zm72 192V320c0 13.3-10.7 24-24 24s-24-10.7-24-24V192c0-13.3 10.7-24 24-24s24 10.7 24 24z"/></svg>
                                                </div>
                                                <div class="delivery-item-content">
                                                    <p class="mb-0">Delivery times</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="delivery-item">
                                            <a class="delivery-item-link">
                                                <div class="delivery-item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                                </div>
                                                <div class="delivery-item-content">
                                                    <p class="mb-0">Nearest department</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="delivery-item">
                                            <a class="delivery-item-link">
                                                <div class="delivery-item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                                                </div>
                                                <div class="delivery-item-content">
                                                    <p class="mb-0">Opening hours of branches</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="delivery-item">
                                            <a class="delivery-item-link">
                                                <div class="delivery-item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                                                </div>
                                                <div class="delivery-item-content">
                                                    <p class="mb-0">Courier call</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- Modal -->
        <div class="modal fade" id="orderShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>№:</strong> <span id="order-id"></span></p>
                    <p><strong>Name:</strong> <span id="order-name"></span></p>
                    <p><strong>Description:</strong> <span id="order-description"></span></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Toast -->
        <div class="toast-container position-absolute p-3 top-0 start-50 translate-middle-x">
            <div id="notFoundToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header bg-danger text-white">
                {{-- <img src="..." class="rounded me-2" alt="..."> --}}
                <strong class="me-auto">Warning message</strong>
                {{-- <small>11 mins ago</small> --}}
                <button type="button" class="btn-close bg-white" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body bg-white-50 text-dark">
                Order not found! Please try again.
              </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script>
            $(document).ready(function() {
                $('body').on('click', '#show-order', function() {
                   let orderURL = $(this).data('url');
                   orderURL = orderURL.substr(0, orderURL.length - 1);
                   if ($('#input-order-id').val()) {
                    orderURL += $('#input-order-id').val();
                   } else {
                    orderURL += "-1";
                   }

                   $.get(orderURL, function(data) {
                        if (data.id) {
                            $('#orderShowModal').modal('show');
                            $('#order-id').text(data.id);
                            $('#order-name').text(data.name);
                            $('#order-description').text(data.description);
                        } else {
                            var myToast = new bootstrap.Toast(document.getElementById('notFoundToast')); 
                            myToast.show();
                            // alert("Order not found! Please try again");
                        }
                   }) 
                });
            });
        </script>
        @endsection
    </body>
</html>
