/**
 * Created by s.van.den.berg on 20-2-14.
 */

var updatePreview = function(element, selector) {
    var preview = $(selector);
    var source = $(element);

    preview.html(source.text());
}