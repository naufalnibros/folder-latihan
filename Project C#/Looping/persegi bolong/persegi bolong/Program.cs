using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace persegi_bolong
{
    class Program
    {
        static void Main(string[] args)
        {
            int N = int.Parse(Console.ReadLine());
            for (int i = 0; i < N; i++)
                Console.Write("*");
            Console.WriteLine();

            for (int i = 0; i < N - 2; i++)
            {
                Console.Write("*");
                for (int j = 0; j < N - 2; j++)
                {
                    Console.Write(" ");
                }
                Console.WriteLine("*");
            }

            for (int i = 0; i < N; i++)
                Console.Write("*");
            Console.WriteLine();
            Console.ReadKey();
        }
    }
}
