

# Cascading

In iTop 2.5.0:

You can have something like Person -> Ticket, and use AttributeExternalField to show the person's phone number in a Ticket. 
This also works for pictures.

You can have something like Person -> Pass -> Check, and Check can use an AttributeExternalField if you inherit it in Pass. 
This could be done as a field which you hide from your presentation. This way, you could show for example the Person's phone number on the Check.

However, if you show the Person's picture on a Pass; you will get errors when creating a Check, even if you don't use the Picture field in the Check.
