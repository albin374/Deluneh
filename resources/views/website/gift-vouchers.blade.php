@include('website.header')
@include('website.nav')
<style>
body {
    background-color: #fcf4ee;
}
.gift-banner {
    width: 100%;
    margin-bottom: 30px;
}
.gift-banner img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.gift-container {
    max-width: 800px;
    margin: 0 auto 50px auto;
    background: #fff;
    padding: 40px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}
.form-group-title {
    font-weight: bold;
    color: #444;
    margin-bottom: 15px;
    font-size: 16px;
}
.radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 25px;
}
.radio-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    cursor: pointer;
    background: #fff;
    flex: 1;
    min-width: 120px;
    justify-content: center;
    transition: all 0.3s ease;
}
.radio-item:has(input[type="radio"]:checked) {
    background-color: #e73c3e;
    color: #fff;
    border-color: #e73c3e;
}
.radio-item input[type="radio"] {
    display: none;
}
.preview-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 30px;
    overflow: hidden;
}
.preview-image img {
    width: 100%;
    height: auto;
    display: block;
}
.material-input {
    width: 100%;
    border: none;
    border-bottom: 1px solid #ccc;
    padding: 15px 0 5px 0;
    margin-bottom: 20px;
    font-size: 14px;
    background: transparent;
    color: #333;
    outline: none;
}
.material-input::placeholder {
    color: #999;
}
.material-input:focus {
    border-bottom: 1px solid #e73c3e;
}
.material-textarea {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 14px;
    background: transparent;
    color: #333;
    outline: none;
    resize: vertical;
    min-height: 80px;
}
.material-textarea::placeholder {
    color: #999;
}
.material-textarea:focus {
    border-color: #e73c3e;
}
.checkbox-group {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    font-size: 13px;
    color: #555;
}
.checkbox-group input[type="checkbox"] {
    margin-right: 10px;
    width: 16px;
    height: 16px;
}
.action-buttons {
    display: flex;
    gap: 15px;
}
.btn-action {
    flex: 1;
    padding: 15px;
    background: #e73c3e;
    color: #fff;
    border: none;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    font-size: 15px;
    border-radius: 4px;
    transition: background 0.3s;
}
.btn-action:hover {
    background: #c82e30;
}
@media (max-width: 768px) {
    .gift-container {
        padding: 20px;
        margin: 0 15px 50px 15px;
    }
    .radio-item {
        min-width: 45%;
    }
}
</style>

<div class="gift-banner">
    <img src="{{ asset('images/gift vochers.png') }}" alt="Gift Vouchers Banner">
</div>

<div class="gift-container">
    <form action="#" method="POST">
        @csrf
        
        <div class="form-group-title">Choose Occasion</div>
        <div class="radio-group">
            <label class="radio-item">
                <input type="radio" name="occasion" value="Wedding" checked> Wedding
            </label>
            <label class="radio-item">
                <input type="radio" name="occasion" value="Anniversary"> Anniversary
            </label>
            <label class="radio-item">
                <input type="radio" name="occasion" value="Festive"> Festive
            </label>
            <label class="radio-item">
                <input type="radio" name="occasion" value="Birthday"> Birthday
            </label>
        </div>

        <div class="preview-image">
            <!-- Using the gift.png as preview image as shown in the screenshot below the occasion -->
            <img id="occasion-preview-image" src="{{ asset('images/wedding_copy_d4LwFhk.avif') }}" alt="Gift Card Preview" style="max-height: 400px; object-fit: cover;">
        </div>

        <div class="form-group-title">Choose an amount</div>
        <div class="radio-group">
            <label class="radio-item">
                <input type="radio" name="amount" value="500" checked> 500
            </label>
            <label class="radio-item">
                <input type="radio" name="amount" value="1000"> 1000
            </label>
            <label class="radio-item">
                <input type="radio" name="amount" value="2000"> 2000
            </label>
        </div>

        <input type="text" name="recipient_name" class="material-input" placeholder="Recipient Name" required>
        <input type="email" name="recipient_email" class="material-input" placeholder="Recipient Email ID" required>
        <input type="tel" name="mobile_number" class="material-input" placeholder="Mobile Number" required>
        
        <textarea name="message" class="material-textarea" placeholder="Message"></textarea>

        <div class="checkbox-group">
            <input type="checkbox" name="terms" id="terms" required>
            <label for="terms">I Understand That Gift Vouchers Are Non-Refundable</label>
        </div>

        <div class="action-buttons">
            <button type="button" class="btn-action">PREVIEW</button>
            <button type="button" class="btn-action">ADD TO CART</button>
        </div>
    </form>
</div>

@include('website.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const occasionRadios = document.querySelectorAll('input[name="occasion"]');
    const previewImage = document.getElementById('occasion-preview-image');
    
    const occasionImages = {
        'Wedding': "{{ asset('images/wedding_copy_d4LwFhk.avif') }}",
        'Anniversary': "{{ asset('images/anniversary_occasion_copy_h4H7M34.avif') }}",
        'Festive': "{{ asset('images/diwali_copy_gLV32bk.avif') }}",
        'Birthday': "{{ asset('images/birthday_occasion_copy_Xr12sgK.avif') }}"
    };

    occasionRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked && occasionImages[this.value]) {
                previewImage.src = occasionImages[this.value];
            }
        });
    });
});
</script>
