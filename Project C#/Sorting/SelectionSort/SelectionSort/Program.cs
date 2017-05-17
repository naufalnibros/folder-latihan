using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SelectionSort
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] data = new int[] { 5, 9, 3, 1, 2, -1, 90, 8, 5, 10 };
            int min;
            for (int i = 0; i < 9; i++)
            {
                min = i;
                for (int j = i + 1; j < 10; j++)
                {
                    if (data[j] < data[min])
                        min = j;
                }
                int temp = data[min];
                data[min] = data[i];
                data[i] = temp;
            }
            for (int i = 0; i < 10; i++)
                Console.Write(data[i] + " ");
            Console.ReadKey();
        }
    }
}
