@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Add New FAQs</h2>
    
    <form action="{{ route('events.faqs.store') }}" method="POST">
        @csrf
        <div id="faq-container">
            <div class="faq-item card p-3 mb-3 position-relative">
                <button type="button" class="btn-close remove-faq position-absolute top-0 end-0 d-none"></button>
                <div class="mb-3">
                    <label class="fw-bold">Question</label>
                    <input type="text" name="faqs[0][question]" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Answer</label>
                    <textarea name="faqs[0][answer]" class="form-control" required></textarea>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary me-2" id="add-faq">➕ Add More</button>
            <button type="submit" class="btn btn-success">✅ Save FAQs</button>
        </div>
    </form>
</div>

<script>
document.getElementById('add-faq').addEventListener('click', function() {
    let container = document.getElementById('faq-container');
    let index = container.getElementsByClassName('faq-item').length;
    
    let newFaq = document.createElement('div');
    newFaq.classList.add('faq-item', 'card', 'p-3', 'mb-3', 'position-relative');
    newFaq.innerHTML = `
        <button type="button" class="btn-close remove-faq position-absolute top-0 end-0"></button>
        <div class="mb-3">
            <label class="fw-bold">Question</label>
            <input type="text" name="faqs[${index}][question]" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Answer</label>
            <textarea name="faqs[${index}][answer]" class="form-control" required></textarea>
        </div>
    `;

    container.appendChild(newFaq);
    updateRemoveButtons();
});

function updateRemoveButtons() {
    let removeButtons = document.querySelectorAll('.remove-faq');
    removeButtons.forEach(button => {
        button.classList.remove('d-none');
        button.addEventListener('click', function() {
            this.parentElement.remove();
            updateIndexes();
        });
    });
}

function updateIndexes() {
    let faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
        item.querySelector("input[name^='faqs']").setAttribute('name', `faqs[${index}][question]`);
        item.querySelector("textarea[name^='faqs']").setAttribute('name', `faqs[${index}][answer]`);
    });
}

updateRemoveButtons();
</script>
@endsection
