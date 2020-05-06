FROM php:apache
RUN sed 's/80/${PORT}/g' -i /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
ENV PORT=80                                                                                                               
COPY index.php . 
COPY new.php . 
COPY task.txt .
