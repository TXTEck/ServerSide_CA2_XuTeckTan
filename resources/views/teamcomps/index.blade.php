@extends('layouts.app')

@section('content')

<div class="team-comp">
    <div class="team-comp-header" onclick="toggleDropdown(this)">
        <img src="{{ asset('images/teams/bigshot1.jpg') }}">
        <button class="team-comp-dropdown-arrow">&#9660;</button>
    </div>
    <div class="team-comp-details" style="display: none;">
        <img src="{{ asset('images/teams/bigshot2.jpg') }}" alt="Expanded Team Composition">
    </div>
</div>

<div class="team-comp">
    <div class="team-comp-header" onclick="toggleDropdown(this)">
        <img src="{{ asset('images/teams/spellweavers1.jpg') }}">
        <button class="team-comp-dropdown-arrow">&#9660;</button>
    </div>
    <div class="team-comp-details" style="display: none;">
        <img src="{{ asset('images/teams/spellweavers2.jpg') }}" alt="Expanded Team Composition">
    </div>
</div>

<div class="team-comp">
    <div class="team-comp-header" onclick="toggleDropdown(this)">
        <img src="{{ asset('images/teams/kda1.jpg') }}">
        <button class="team-comp-dropdown-arrow">&#9660;</button>
    </div>
    <div class="team-comp-details" style="display: none;">
        <img src="{{ asset('images/teams/kda2.jpg') }}" alt="Expanded Team Composition">
    </div>
</div>

<div class="team-comp">
    <div class="team-comp-header" onclick="toggleDropdown(this)">
        <img src="{{ asset('images/teams/pentakill1.jpg') }}">
        <button class="team-comp-dropdown-arrow">&#9660;</button>
    </div>
    <div class="team-comp-details" style="display: none;">
        <img src="{{ asset('images/teams/pentakill2.jpg') }}" alt="Expanded Team Composition">
    </div>
</div>

<div class="team-comp">
    <div class="team-comp-header" onclick="toggleDropdown(this)">
        <img src="{{ asset('images/teams/punk1.jpg') }}">
        <button class="team-comp-dropdown-arrow">&#9660;</button>
    </div>
    <div class="team-comp-details" style="display: none;">
        <img src="{{ asset('images/teams/punk2.jpg') }}" alt="Expanded Team Composition">
    </div>
</div>
<script>
function toggleDropdown(element) {
    const details = element.nextElementSibling;
    const isVisible = details.style.display === 'block';
    details.style.display = isVisible ? 'none' : 'block';

    // Rotate the dropdown arrow to indicate state
    const arrow = element.querySelector('.team-comp-dropdown-arrow');
    arrow.style.transform = isVisible ? 'rotate(0deg)' : 'rotate(180deg)';
}
</script>

@endsection
