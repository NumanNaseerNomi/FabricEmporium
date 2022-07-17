<div class="accordion container pb-3" id="accordion{{ $product->id }}">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button  p-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseArea{{ $product->id }}" aria-expanded="false" aria-controls="collapseArea{{ $product->id }}">
            <i class="fal fa-comments me-2"></i><strong>Comments</strong>
            </button>
        </h2>
        <div id="collapseArea{{ $product->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion{{ $product->id }}">
            <div class="accordion-body">
                <form method="post" action="{{ url('/addComment') }}">
                    @csrf
                    <input name="productId" type="hidden" value="{{ $product->id }}" />
                    <div class="input-group mb-3">
                        <textarea name="comment" type="text" class="form-control" rows="1" placeholder="Type your comment here..." aria-label="Comment" aria-describedby="button-addon2" required></textarea>
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Send</button>
                    </div>
                </form>
                <div class="overflow-auto" style="max-height: 200px;">
                    @foreach($product->comments as $commentDetail)
                        <p><span class="shadow-sm p-1 bg-light border rounded"><strong>{{ $commentDetail->userDetail->name }}: </strong>{{ $commentDetail->comment }}</span></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
