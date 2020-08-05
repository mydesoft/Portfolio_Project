@component('mail::message')

        
           # You Have a Message from {{$contact->name}} 
                
            Subject: {{$contact->subject}}
               
            Message:  {{$contact->message}}

        










@endcomponent
