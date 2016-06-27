/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code, and some great help from Dan - see his comments in blog post)
Plugin repo: https://github.com/tristandenyer/Clone-section-of-form-using-jQuery
Demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.5.0
Last updated: Oct 23, 2015

The MIT License (MIT)

Copyright (c) 2011 Tristan Denyer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
/*alert('colnerup');*/
jQuery(function () {
    jQuery('#btnAdd').click(function () {
        var num     = jQuery('.clonedInput').length, // added this -1 -grog,  Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newNum0 = newNum - 1;
            newElem = jQuery('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // H2 - section
        newElem.find('.heading-reference').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum0 + '_reference').html('Entry #' + newNum);

  
        // Post Title
        newElem.find('.label_fn').attr('for', 'post_title' + newNum );
        newElem.find('.input_fn').attr('id', 'post_title' + newNum ).attr('name', 'titles[' + newNum0 + ']').val('');




        // Last name - text
        newElem.find('.label_ln').attr('for', 'post_category_name' + newNum );
        newElem.find('.input_ln').attr('id', 'post_category_name' + newNum ).attr('name', 'categories[' + newNum0 + ']').val('');

         // Post Content
        newElem.find('.label_textarea').attr('for', 'post_content' + newNum );
        newElem.find('.input_text').attr('id', 'notes' + newNum ).attr('name', 'content[' + newNum0 + ']').val('');

            // Flavor - checkbox
        // Note that each input_checkboxitem has a unique identifier "-0". This helps pair up duplicated checkboxes and labels correctly. A bit verbose, at the moment.
        newElem.find('.label_checkboxitem').attr('for', 'ID' + newNum + '_checkboxitem');
        newElem.find('.input_checkboxitem-0').attr('id', 'ID' + newNum + '_checkboxitem-0').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-1').attr('id', 'ID' + newNum + '_checkboxitem-1').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-2').attr('id', 'ID' + newNum + '_checkboxitem-2').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-3').attr('id', 'ID' + newNum + '_checkboxitem-3').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-4').attr('id', 'ID' + newNum + '_checkboxitem-4').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-5').attr('id', 'ID' + newNum + '_checkboxitem-5').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-6').attr('id', 'ID' + newNum + '_checkboxitem-6').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-7').attr('id', 'ID' + newNum + '_checkboxitem-7').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-8').attr('id', 'ID' + newNum + '_checkboxitem-8').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-9').attr('id', 'ID' + newNum + '_checkboxitem-9').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-10').attr('id', 'ID' + newNum + '_checkboxitem-10').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-11').attr('id', 'ID' + newNum + '_checkboxitem-11').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-12').attr('id', 'ID' + newNum + '_checkboxitem-12').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-13').attr('id', 'ID' + newNum + '_checkboxitem-13').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-14').attr('id', 'ID' + newNum + '_checkboxitem-14').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-15').attr('id', 'ID' + newNum + '_checkboxitem-15').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-16').attr('id', 'ID' + newNum + '_checkboxitem-16').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-17').attr('id', 'ID' + newNum + '_checkboxitem-17').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-18').attr('id', 'ID' + newNum + '_checkboxitem-18').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-19').attr('id', 'ID' + newNum + '_checkboxitem-19').attr('name', 'categories[' + newNum0 + '][]').val([]);
        newElem.find('.input_checkboxitem-20').attr('id', 'ID' + newNum + '_checkboxitem-20').attr('name', 'categories[' + newNum0 + '][]').val([]);


        // Flavor - checkbox labels
        // Note that each checkboxitem has a unique identifier "-0". This helps pair up duplicated checkboxes and labels correctly. A bit verbose, at the moment.
        newElem.find('.checkboxitem-0').attr('for', 'ID' + newNum + '_checkboxitem-0');
        newElem.find('.checkboxitem-1').attr('for', 'ID' + newNum + '_checkboxitem-1');
        newElem.find('.checkboxitem-2').attr('for', 'ID' + newNum + '_checkboxitem-2');
        newElem.find('.checkboxitem-3').attr('for', 'ID' + newNum + '_checkboxitem-3');
        newElem.find('.checkboxitem-4').attr('for', 'ID' + newNum + '_checkboxitem-4');
        newElem.find('.checkboxitem-5').attr('for', 'ID' + newNum + '_checkboxitem-5');
        newElem.find('.checkboxitem-6').attr('for', 'ID' + newNum + '_checkboxitem-6');
        newElem.find('.checkboxitem-7').attr('for', 'ID' + newNum + '_checkboxitem-7');
        newElem.find('.checkboxitem-8').attr('for', 'ID' + newNum + '_checkboxitem-8');
        newElem.find('.checkboxitem-9').attr('for', 'ID' + newNum + '_checkboxitem-9');
        newElem.find('.checkboxitem-10').attr('for', 'ID' + newNum + '_checkboxitem-10');
        newElem.find('.checkboxitem-11').attr('for', 'ID' + newNum + '_checkboxitem-11');
        newElem.find('.checkboxitem-12').attr('for', 'ID' + newNum + '_checkboxitem-12');
        newElem.find('.checkboxitem-13').attr('for', 'ID' + newNum + '_checkboxitem-13');
        newElem.find('.checkboxitem-14').attr('for', 'ID' + newNum + '_checkboxitem-14');
        newElem.find('.checkboxitem-15').attr('for', 'ID' + newNum + '_checkboxitem-15');
        newElem.find('.checkboxitem-16').attr('for', 'ID' + newNum + '_checkboxitem-16');
        newElem.find('.checkboxitem-17').attr('for', 'ID' + newNum + '_checkboxitem-17');
        newElem.find('.checkboxitem-18').attr('for', 'ID' + newNum + '_checkboxitem-18');
        newElem.find('.checkboxitem-19').attr('for', 'ID' + newNum + '_checkboxitem-19');
        newElem.find('.checkboxitem-20').attr('for', 'ID' + newNum + '_checkboxitem-20');



    // Insert the new element after the last "duplicatable" input field
        jQuery('#entry' + num).after(newElem);
        jQuery('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        jQuery('#btnDel').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 5)
        jQuery('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    jQuery('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undone."))
            {
                var num = jQuery('.clonedInput').length;
                // how many "duplicatable" input fields we currently have
                jQuery('#entry' + num).slideUp('slow', function () {jQuery(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                jQuery('#btnDel').attr('disabled', true);
                // enable the "add" button
                jQuery('#btnAdd').attr('disabled', false).prop('value', "add section");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    jQuery('#btnAdd').attr('disabled', false);
    // Disable the "remove" button
    jQuery('#btnDel').attr('disabled', true);
});