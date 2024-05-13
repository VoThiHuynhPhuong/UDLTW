@extends ('layouts.site')
@section('title','Trang chủ')
@section('content')

<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider1.webp')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider2.webp')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider3.webp')}}" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

    <div class="product-he" style="margin-top: 40px;">
        <div class="product">
            <img src="{{ asset('images/balo1.webp')}}" alt="BLACK BLOCK BACKPACK">      
                        <h3>BLACK BLOCK BACKPACK</h3>
            <div class="product-info">
                <div class="price">
                    <span class="new-price">670.000₫</span>
                </div>
                <button class="btn btn-primary">Mua ngay</button>
                <button class="btn btn-primary">Thêm vào giỏ</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/balo2.webp')}}" alt="MOTIVATION GRUNGE BACKPACK">
                        <h3>MOTIVATION BACKPACK</h3>
            <div class="product-info">
                <div class="price">
                    <span class="new-price">620.000₫</span>
                </div>
                <button class="btn btn-primary">Mua ngay</button>
                <button class="btn btn-primary">Thêm vào giỏ</button>
            </div>
        </div>
        <div class="product">
            <img src="{{ asset('images/balo3.webp')}}" alt="ALMIGHTY WINED BACKPACK">
            <h3>ALMIGHTY WINED BACKPACK</h3>
<div class="product-info">
    <div class="price">
        <span class="old-price">670.000₫</span>
        <span class="new-price">599.000₫</span>

    </div>
    <button class="btn btn-primary">Mua ngay</button>
    <button class="btn btn-primary">Thêm vào giỏ</button>
</div>
</div>
        <div class="product">
            <img src="{{ asset('images/balo4.webp')}}" alt="NEOPRENE UTILITY BACKPACK">
                        <h3>NEOPRENE UTILITY BACKPACK</h3>
<div class="product-info">
    <div class="price">
        <span class="old-price">890.000₫</span>
        <span class="new-price">680.000₫</span>
    </div>
    <button class="btn btn-primary">Mua ngay</button>
    <button class="btn btn-primary">Thêm vào giỏ</button>
</div>
</div>
        <div class="product">
            <img src="{{ asset('images/balo5.webp')}}" alt="ZWART WEEKENDER BAG">
                        <h3>ZWART WEEKENDER BAG</h3>

            <div class="product-info">
                <div class="price">
                    <span class="new-price">690.000₫</span>
                </div>
                <button class="btn btn-primary">Mua ngay</button>
                <button class="btn btn-primary">Thêm vào giỏ</button>
            </div>
        </div>

        <div class="product">
            <img src="{{ asset('images/balo6.webp')}}" alt="MINUTE BAG">
            <h3>MINUTE BAG</h3>
            <div class="product-info">
                <div class="price">
                    <span class="old-price">380.000₫</span>
                    <span class="new-price">259.000₫</span>
                </div>
                <button class="btn btn-primary">Mua ngay</button>
                <button class="btn btn-primary">Thêm vào giỏ</button>
            </div>
            </div>
        </div>
        <div class="product-he">
            <div class="product">
                <img src="{{ asset('images/ak1.webp')}}" alt="HADES PARACHUTE JACKET">
            <h3>HADES PARACHUTE JACKET</h3>

                <div class="product-info">
                    <div class="price">
                        <span class="new-price">720.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/ak2.webp')}}" alt="SKEWED HOOK HOODIE">
                <h3>SKEWED HOOK HOODIE</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="old-price">750.000₫</span>
                        <span class="new-price">450.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/ak3.webp')}}" alt="HADES RACER VAIN JACKET">
                <h3>HADES RACER VAIN JACKET</h3>
    
    <div class="product-info">
        <div class="price">
            <span class="new-price">720.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/ak6.webp')}}" alt="LITHE BOXY HOODIE">
                            <h3>LITHE BOXY HOODIE</h3>
    <div class="product-info">
        <div class="price">
            <span class="new-price">750.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/ak4.webp')}}" alt="HADES POLYESTER JACKET">
                <h3>HADES POLYESTER JACKET</h3>
    
                <div class="product-info">
                    <div class="price">
                        <span class="old-price">450.000₫</span>
                        <span class="new-price">350.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
    
            <div class="product">
                <img src="{{ asset('images/ak5.webp')}}" alt="ARBORMASS HOODIE">
            <h3>ARBORMASS HOODIE</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">720.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
                </div>
            </div>
        </div>
        <div class="product-he">
            <div class="product">
                <img src="{{ asset('images/qj1.webp')}}" alt="HADES JEANS SHORT">
                <h3>HADES JEANS SHORT</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="old-price">680.000₫</span>
                    <span class="new-price">340.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/qd2.webp')}}" alt="HADES KHAKI CARGO SHORTS">
                <h3>HADES CARGO SHORTS</h3>

                <div class="product-info">
                    <div class="price">
                        <span class="new-price">620.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/qn1.webp')}}" alt="HADES REFLECTED PARACHUTE SHORTS">
                <h3>HADES PARACHUTE SHORTS</h3>

    <div class="product-info">
        <div class="price">
            <span class="old-price">450.000₫</span>
                    <span class="new-price">350.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/qn2.webp')}}" alt="ROBUST SHORTS">
                <h3>ROBUST SHORTS</h3>
    <div class="product-info">
        <div class="price">
            <span class="new-price">450.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/quan1.webp')}}" alt="HADES LODESTAR MESH SHORT">
                <h3>HADES LODESTAR SHORT</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="old-price">450.000₫</span>
                    <span class="new-price">260.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
    
            <div class="product">
                <img src="{{ asset('images/qn3.webp')}}" alt="MOTIVATION GRUNGE BACKPACK">
                <h3>MOTIVATION BACKPACK</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">450.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
                </div>
            </div>
        </div>
        <div class="product-he">
            <div class="product">
                <img src="{{ asset('images/ts1.webp')}}" alt="ALTHLETIC MESH JERSEY">
                <h3>ALTHLETIC MESH JERSEY</h3>

                <div class="product-info">
                    <div class="price">
                        <span class="new-price">450.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/ao 1.webp')}}" alt="HADES WHITE MESH TEE">
                    <h3>HADES WHITE MESH TEE</h3>

                <div class="product-info">
                    <div class="price">
                        <span class="old-price">450.000₫</span>
                        <span class="new-price">350.000₫</span>

                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/ts2.webp')}}" alt="HADES CERISE CRAVAT TEE">
                    <h3>HADES CRAVAT TEE</h3>

    <div class="product-info">
        <div class="price">
            <span class="new-price">450.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/ts3.webp')}}" alt="HADES FLORIE TEE">
                    <h3>HADES FLORIE TEE</h3>

    <div class="product-info">
        <div class="price">
            <span class="old-price">450.000₫</span>
            <span class="new-price">400.000₫</span>
        </div>
        <button class="btn btn-primary">Mua ngay</button>
        <button class="btn btn-primary">Thêm vào giỏ</button>
    </div>
    </div>
            <div class="product">
                <img src="{{ asset('images/ts4.webp')}}" alt="SCUFFERS LOVE POLO">
                <h3>SCUFFERS LOVE POLO</h3>

                <div class="product-info">
                    <div class="price">
                        <span class="old-price">450.000₫</span>
                        <span class="new-price">350.000₫</span>

                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
            </div>
    
            <div class="product">
                <img src="{{ asset('images/ts5.webp')}}" alt="SONOROUS TANK TOP">
                <h3>SONOROUS TANK TOP</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">380.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                    <button class="btn btn-primary">Thêm vào giỏ</button>
                </div>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    </div>
</div>
@endsection