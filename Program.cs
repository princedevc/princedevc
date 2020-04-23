using System;
using System.Collections.Generic;
using System.Linq;

namespace Assignment2
{
    class Program
    {
        static void Main(string[] args)
        {
            int numb=7;

            Console.WriteLine("Choose Level< Easy, Hard Or Medium");
            string level = Console.ReadLine();
            Console.WriteLine("Level selection is "+ level);
            Console.WriteLine("Guess the number from 1-");
            int number = int.Parse(Console.ReadLine());
            if (level =="Easy")
            {
                for (var guess=0;guess<6; guess++)
                {
                //Console.WriteLine("You have" + guess +" more guesses left");
                
                if(number == numb &&  number < 10){
                    Console.WriteLine("You got it right");
                }
                else{
                    
                    Console.WriteLine("That was wrong");
                    
                    
                }Console.WriteLine("This is the value of the counter"+guess);
                continue;
                
                }
               
            }
            else
            {
                Console.WriteLine("Does not recognize selection");
            }


           /* int Easy(){

            }
            int Hard(){

            }

            int Medium(){

            }*/

        }
    }
}
