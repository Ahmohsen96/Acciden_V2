<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentReport extends Model
{
    use HasFactory;

      // Define the fillable attributes
      protected $fillable = [
        'accident_date',             // Date of the accident
        'accident_time',             // Time of the accident
        'region',                    // Region where the accident occurred
        'location',                  // Specific location of the accident
        'injured_employee_name',     // Name of the injured employee
        'department',                // Department of the injured employee
        'description',               // Description of the accident
        'loss',                      // Any loss incurred (nullable)
        'immediate_causes',         // Immediate causes of the accident (nullable)
        'underlying_causes',        // Underlying causes of the accident (nullable)
        'root_causes',              // Root causes of the accident (nullable)
        'recommendations',           // Recommendations following the accident (nullable)
        'acknowledgement_name',      // Name of the person acknowledging the report
        'acknowledgement_signature',  // Signature of the person acknowledging the report
        'acknowledgement_date',
    ];

    // Optionally, define relationships
    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater() {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
