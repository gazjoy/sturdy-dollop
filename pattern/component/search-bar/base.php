<form action="#" class="search-bar">
    <div class="search-bar__header">
        <div class="u-container">
            <h3 class="search-bar__title">I am looking for</h3>
            <br class="u-hidden-xl" />
            <br class="u-hidden-xl" />
            
            <ul class="search-bar__options">
                <li>
                    <label for="lookup-caravan" class="radio">
                        <input id="lookup-caravan" name="radio" type="radio" checked>
                        <span class="radio__label">A caravan holiday</span>
                    </label>
                </li>
                <li>
                    <label for="lookup-touring" class="radio">
                        <input id="lookup-touring" name="radio" type="radio">
                        <span class="radio__label">A touring pitch for my caravan</span>
                    </label>
                </li>
                <li>
                    <label for="lookup-camping" class="radio">
                        <input id="lookup-camping" name="radio" type="radio">
                        <span class="radio__label">A camping holiday</span>
                    </label>
                </li>
                <li>
                    <label for="lookup-caravan-buy" class="radio">
                        <input id="lookup-caravan-buy" name="radio" type="radio">
                        <span class="radio__label">A caravan to buy</span>
                    </label>
                </li>
            </ul>
        </div>
    
    </div>
    <div class="search-bar__footer">
        <div class="u-container">
            
            <div class="grid g-gutter-x g-center">

                <div class="field-group g-col-lg-2">
                    <label for="lookup-park" class="field-group__label" for="select">Choose a park</label>
                    <div class="field-group__field">
                        <div class="select">
                            <select id="lookup-park">
                                <option selected>All</option>
                                <option>Option Two</option>
                                <option>Option Three</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field-group g-col-lg-2">
                    <label for="lookup-when" class="field-group__label">When</label>
                    <div class="field-group__field">
                        <input id="lookup-when" type="text" placeholder="Select a date">
                    </div>
                </div>
                    
                <div class="field-group g-col-lg-2">
                    <label class="field-group__label" for="lookup-duration">Duration</label>
                    <div class="field-group__field">
                        <div class="select">
                            <select id="lookup-duration">
                                <option>7 nights</option>
                                <option>Option Two</option>
                                <option>Option Three</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field-group g-col-lg-2">
                    <label class="field-group__label" for="lookup-accommodation">Accommodation</label>
                    <div class="field-group__field">
                        <div class="select">
                            <select id="lookup-accommodation">
                                <option>All</option>
                                <option>Option Two</option>
                                <option>Option Three</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field-group g-col-lg-2">
                    <label for="lookup-where" class="field-group__label">Where are you?</label>
                    <div class="field-group__field">
                        <input id="lookup-where" type="text" placeholder="First 4 digits of postcode">
                    </div>
                </div>
                    

                <div class="field-group g-col-lg-2">
                    <button type="submit" class="btn search-bar__action">Search Holidays</button>
                </div>
            </div>
            
        </div>
    </div>
</form>