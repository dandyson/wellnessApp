<?php

namespace App\Http\Livewire;

use App\Models\JournalEntry;
use Livewire\Component;

class WorryJournalWizard extends Component
{
    public $currentStep = 1;
    public $before_entry, $after_entry, $fortune_telling, $over_estimating_danger, $catastrophizing, $mind_reading, $black_and_white_thinking, $over_generalizing, $negative_brain_filter, $should_statements, $emotional_reasoning, $unsure, $status = 1;
    public $successMsg = '';
  
    /**
     * Write code on Method
     */
    public function render()
    {
        return view('livewire.worry-journal-wizard');
    }
  
    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'before_entry' => 'required',
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'status' => 'required',
            'after_entry' => 'required',
            'fortune_telling' => 'nullable',
            'over_estimating_danger' => 'nullable',   
            'catastrophizing' => 'nullable',
            'mind_reading' => 'nullable',
            'black_and_white_thinking'  => 'nullable',
            'over_generalizing' => 'nullable',    
            'negative_brain_filter' => 'nullable',
            'should_statements' => 'nullable',
            'emotional_reasoning' => 'nullable',
            'unsure' => 'nullable',
        ]);
  
        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'status' => 'required',
            'fortune_telling' => 'nullable',
            'over_estimating_danger' => 'nullable',   
            'catastrophizing' => 'nullable',
            'mind_reading' => 'nullable',
            'black_and_white_thinking'  => 'nullable',
            'over_generalizing' => 'nullable',    
            'negative_brain_filter' => 'nullable',
            'should_statements' => 'nullable',
            'emotional_reasoning' => 'nullable',
            'unsure' => 'nullable',
        ]);
  
        $this->currentStep = 4;
    }
  
    /**
     * Write code on Method
     */
    public function submitForm()
    {
        JournalEntry::create([
            'before_entry' => $this->before_entry,
            'after_entry' => $this->after_entry,
            'fortune_telling' => $this->fortune_telling,
            'over_estimating_danger' => $this->over_estimating_danger,   
            'catastrophizing' => $this->catastrophizing,
            'mind_reading' => $this->mind_reading,
            'black_and_white_thinking'  => $this->black_and_white_thinking,
            'over_generalizing' => $this->over_generalizing,    
            'negative_brain_filter' => $this->negative_brain_filter,
            'should_statements' => $this->should_statements,
            'emotional_reasoning' => $this->emotional_reasoning,
            'unsure' => $this->unsure,
            'status' => $this->status,
        ]);
  
        $this->successMsg = 'Team successfully created.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->before_entry = '';
        $this->after_entry = '';
        $this->fortune_telling = '';
        $this->over_estimating_danger = '';   
        $this->catastrophizing = '';
        $this->mind_reading = '';
        $this->black_and_white_thinking = '';
        $this->over_generalizing = '';    
        $this->negative_brain_filter = '';
        $this->should_statements = '';
        $this->emotional_reasoning = '';
        $this->unsure = '';
        $this->status = 1;
    }
}
