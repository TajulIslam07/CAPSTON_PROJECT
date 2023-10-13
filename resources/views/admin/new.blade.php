<?php
<div style="padding:20px">
                    <label>Doctor image:</label>
                    <input  type="file"  name="image">
                </div>


$request->validate([
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/doctor_image', $fileName);
